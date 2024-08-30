<?php

namespace App\Controller;

use App\Card\DeckOfCards;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ControllerJson extends AbstractController
{
    
    #[Route("/api", name: "api_index")]
    public function apiIndex(): Response
    {
        $routes = [
            ['name' => 'api_quote', 'path' => '/api/quote', 'description' => 'Returns a random quote.'],
            ['name' => 'api_deck', 'path' => '/api/deck', 'description' => 'Returns the complete Card Deck.'],
            ['name' => 'api_deck_draw', 'path' => '/api/deck/draw', 'description' => 'Returns a random card from Card Deck.'],
            ['name' => 'api_deck_shuffle', 'path' => '/api/deck/shuffle', 'description' => 'Returns a shuffled Card Deck.'],
            ['name' => 'api_deck_draw_number', 'path' => '/api/deck/draw/{number}', 'description' => 'Returns a given number of cards from Card Deck.']

            // ...
        ];

        return $this->render('api/index.html.twig', ['routes' => $routes]);
    }

    #[Route("/api/quote", name: "api_quote")]
    public function apiQuote(): JsonResponse
    {
        // Define an array of quotes to choose from
        $quotes = [
            "The best way to predict the future is to invent it.",
            "Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful.",
            "You don not have to be great to start, but you have to start to be great.",
        ];

        // Pick a random quote from the array
        $quote = $quotes[array_rand($quotes)];

        // Generate the response data
        $data = [
            'quote' => $quote,
            'date' => date('Y-m-d H:i:s', time()),
            'timestamp' => time(),
        ];

        // Create and return the JSON response
        return new JsonResponse($data);
    }

    #[Route("/api/deck", name: "api_deck")]
    public function apiDeck(): JsonResponse
    {
        $cards = [];

        $suits = ['hearts', 'diamonds', 'clubs', 'spades'];
        $values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $cards[] = ['suit' => $suit, 'value' => $value];
            }
        }

        // Sort cards by suit and then by value
        usort($cards, function ($a, $b) use ($suits, $values) {
            if ($a['suit'] == $b['suit']) {
                return array_search($a['value'], $values) - array_search($b['value'], $values);
            } else {
                return array_search($a['suit'], $suits) - array_search($b['suit'], $suits);
            }
        });

        // Create and return the JSON response
        return new JsonResponse($cards);
    }

    #[Route('/api/deck/shuffle', name: 'api_deck_shuffle', methods: ['GET'])]
    public function apiDeckShuffle(Request $request): JsonResponse
    {
        $cards = $this->getCards();

        shuffle($cards);

        return new JsonResponse($cards);
    }

    private function getCards(): array
    {
        $cards = [];

        $suits = ['hearts', 'diamonds', 'clubs', 'spades'];
        $values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $cards[] = ['suit' => $suit, 'value' => $value];
            }
        }

        return $cards;
    }

    #[Route("/api/deck/draw", name: "api_deck_draw", methods: ["POST"])]
    public function drawOneCard(SessionInterface $session): JsonResponse
    {
        // Retrieve the deck from the session, or initialize it if it does not exist
        $deck = $session->get('deck', $this->initializeDeck());
    
        // Draw one card from the deck
        $card = array_pop($deck);
    
        // Save the updated deck back to the session
        $session->set('deck', $deck);
    
        // Return a JSON response with the drawn card and the number of remaining cards
        return $this->json([
            'card' => $card ? $card->getAsHtmlString() : null, // Assuming getAsHtmlString() gives a suitable representation
            'remaining_cards' => count($deck)
        ]);
    }
    


    #[Route("/api/deck/draw/{number}", name: "api_deck_draw_number", methods: ["POST"])]
    public function drawMultipleCards(SessionInterface $session, int $number): Response
    {
        $deck = $session->get('deck', $this->initializeDeck());
        $cards = array_splice($deck, -$number);

        $session->set('deck', $deck);

        return $this->json([
            'cards' => $cards,
            'remaining_cards' => count($deck)
        ]);
        return $this->render('card/deck.html.twig');
    }

    private function initializeDeck(): array
    {
        $suits = ['Hearts', 'Diamonds', 'Clubs', 'Spades'];
        $values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King', 'Ace'];

        $deck = [];
        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $deck[] = "$value of $suit";
            }
        }

        shuffle($deck);
        return $deck;
    }
}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

class ControllerJson extends AbstractController
{
    
    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

    #[Route("/lucky", name: "lucky")]
    public function lucky(): Response
    {
        return $this->render('lucky.html.twig');
    }

    // Sessionshanterare
    #[Route('/session', name: 'session_debug')]
    public function sessionDebug(SessionInterface $session): Response
    {
        // hämtar all sessionsdata
        $sessionData = $session->all();

        return $this->render('session.html.twig', [
            'sessionData' => $sessionData
        ]);
    }

    /**
     * Initiera en ny blandad kortlek.
     */
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

    #[Route("/session/delete", name: "session_delete", methods: ["POST"])]
    public function deleteSession(SessionInterface $session): Response
    {

        $session->clear();

        $this->addFlash('success', 'Nu är sessionen raderad.');

        return $this->redirectToRoute('session_debug');
    }

    //JSON API routing
    #[Route("/api", name: "api_index")]
    public function apiIndex(): Response
    {
        $routes = [
            ['name' => 'api_quote', 'path' => '/api/quote', 'description' => 'Returns a random quote.'],
            ['name' => 'api_deck', 'path' => '/api/deck', 'description' => 'Returns the complete Card Deck.'],
            //['name' => 'api_deck_shuffle', 'path' => '/api/deck/shuffle', 'description' => 'Returns a shuffled Card Deck.'],
            //['name' => 'api_deck_draw', 'path' => '/api/deck/draw', 'description' => 'Returns a random card from Card Deck.'],
            //['name' => 'api_deck_draw_number', 'path' => '/api/deck/draw/{number}', 'description' => 'Returns a given number of cards from Card Deck.']

        ];

        return $this->render('api/index.html.twig', ['routes' => $routes]);
    }

    #[Route("/api/quote", name: "api_quote")]
    public function apiQuote(): JsonResponse
    {
        $quotes = [
            "The best way to predict the future is to invent it.",
            "Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful.",
            "You don not have to be great to start, but you have to start to be great.",
        ];

        $quote = $quotes[array_rand($quotes)];

        $data = [
            'quote' => $quote,
            'date' => date('Y-m-d H:i:s', time()),
            'timestamp' => time(),
        ];

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

        usort($cards, function ($a, $b) use ($suits, $values) {
            if ($a['suit'] == $b['suit']) {
                return array_search($a['value'], $values) - array_search($b['value'], $values);
            } else {
                return array_search($a['suit'], $suits) - array_search($b['suit'], $suits);
            }
        });

        return new JsonResponse($cards);
    }

    #[Route('/api/deck/shuffle', name: 'api_deck_shuffle', methods: ['POST'])]
    public function apiDeckShuffle(SessionInterface $session): JsonResponse
    {
        $cards = $this->getCards();

        shuffle($cards);
        $session->set('deck', $cards);

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

        $deck = $session->get('deck', $this->initializeDeck());

        if (empty($deck)) {
            return $this->json(['error' => 'The deck is empty.'], 400);
        }

        $card = array_pop($deck);

        $session->set('deck', $deck);

        return $this->json([
            'card' => $card,
            'remaining_cards' => count($deck)
        ]);
    }



    #[Route("/api/deck/draw/{number}", name: "api_deck_draw_number", methods: ["POST"])]
    public function drawMultipleCards(SessionInterface $session, Request $request, int $number = null): JsonResponse
    {

        $number = $request->request->get('number', $number);


        $deck = $session->get('deck', $this->initializeDeck());

        if ($number < 1) {
            return $this->json(['error' => 'The number must be at least 1.'], 400);
        }

        if (count($deck) < $number) {
            return $this->json(['error' => 'Not enough cards in the deck.'], 400);
        }

        $cards = array_splice($deck, 0, $number);

        $session->set('deck', $deck);

        return $this->json([
            'cards' => $cards,
            'remaining_cards' => count($deck)
        ]);
    }

}

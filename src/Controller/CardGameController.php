<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\DeckOfCards;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CardGameController extends AbstractController
{
    //#[Route("/home", name: "home")]
    //public function home(): Response
    //{
        //return $this->render('session.html.twig');
    //}

    #[Route("/card", name: "card_start")]
    public function card(): Response
    {
        return $this->render('card/card.html.twig');
    }

    #[Route("/card/deck", name: "card_deck")]
    public function showDeck(): Response
    {

        $suits = ['hearts' => '♥', 'diamonds' => '♦', 'clubs' => '♣', 'spades' => '♠'];
        $values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
    

        $cards = [];
    

        foreach ($suits as $suitName => $suitSymbol) {
            foreach ($values as $value) {
                $cards[$suitName][] = [
                    'suit' => $suitSymbol,
                    'value' => $value
                ];
            }
        }

        return $this->render('card/deck.html.twig', [
            'cards' => $cards
        ]);
    }
    
    #[Route('/card/deck/shuffle', name: 'card_deck_shuffle', methods: ['GET'] )]
    public function shuffleDeck(SessionInterface $session): Response
    {
        // Hämtar kortleken från sessionen, eller initierar ny
        $deck = $session->get('deck', $this->getCards());

        // blandar kortleken
        shuffle($deck);
    
        // sparar den blandade kortleken till sessionen
        $session->set('deck', $deck);

        
        return $this->render('card/shuffle.html.twig', [
            'deck' => $deck,
        ]);
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

    #[Route('/card/deck/draw', name: 'card_deck_draw')]
    public function drawCard(Request $request, SessionInterface $session): Response
    {
        $deck = $session->get('deck', $this->initializeDeck());

        if (empty($deck)) {
            return $this->json(['error' => 'Kortleken är tom.'], 400);
        }

        $card = array_pop($deck);

        $session->set('deck', $deck);

        return $this->render('card/draw.html.twig', [
            'card' => $card,
            'remainingCards' => count($deck),
        ]);
    }

    #[Route('/card/deck/draw/{number}', name: 'card_deck_draw_count', methods: ["GET"])]
    public function drawCount(SessionInterface $session, Request $request, int $number = null): Response
    {
        $number = $request->query->get('number', $number);

        $deck = $session->get('deck', $this->initializeDeck());

        if ($number < 1) {
            return $this->json(['error' => 'The number must be at least 1.'], 400);
        }

        if (count($deck) < $number) {
            return $this->json(['error' => 'Not enough cards in the deck.'], 400);
        }

        $cards = array_splice($deck, 0, $number);

        $session->set('deck', $deck);

        return $this->render('card/count.html.twig', [
            'cards' => $cards,
            'remainingCards' => count($deck),
        ]);
    }

    private function initializeDeck(): array
    {
        $suits = ['Hearts', 'Diamonds', 'Clubs', 'Spades'];
        $values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King', 'Ace'];

        $deck = [];
        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $deck[] = (object) [
                    'value' => $value,
                    'suit' => $suit
                ];
            }
        }

        shuffle($deck);
        return $deck;
    }
}
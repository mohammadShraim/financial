<?php

namespace App\Http\Controllers\Web\Cards;

use App\Http\Controllers\Controller;
use App\Models\Cards\Card;
use App\Models\PointOfSales\PointOfSale;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * @var Card
     */
    private $card;

    /**
     * @param Card $card
     */
    public function __construct(Card $card)
    {
        $this->card = $card;
    }

    /**
     * @param PointOfSale $pointOfSale
     * @param Request $request
     * @return Application|Factory|View
     */
    public function search(PointOfSale $pointOfSale, Request $request)
    {
        $card = null;
        if (is_numeric($request->serial)) {
            $card = $this->card->where('serial', $request->serial)->where('point_of_sale_id', $pointOfSale->id)->where('refund', false)->first();
        }

        return view('cards.search')->with('pointOfSale', $pointOfSale)->with('card', $card);
    }
}

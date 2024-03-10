<?php

declare(strict_types=1);

namespace Lotsofpixels\DeliveryTime\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class Deliverytime implements ArgumentInterface
{
    public function getDeliverytime()
    {
        $now = date('h');
        $today = date('w');
        switch ($today) {
            case '0':
                $deliveryDate = "dinsdag";
                break;
            case '1':
                if ($now > "14") {
                    $deliveryDate = "woensdag";
                } else {
                    $deliveryDate = "dinsdag";
                }
                break;
            case '2':
                if ($now > "14") {
                    $deliveryDate = "donderdag";
                } else
                    $deliveryDate = "woensdag";
                break;
            case '3':
                if ($now > "14") {
                    $deliveryDate = "vrijdag";
                } else
                    $deliveryDate = "donderdag";
                break;
            case '4':
                if ($now > "14") {
                    $deliveryDate = "zaterdag";
                } else
                    $deliveryDate = "vrijdag";
                break;
            case '5':
                if ($now > "14") {
                    $deliveryDate = "maandag";
                } else
                    $deliveryDate = "zaterdag";
                break;
            case '6':
                $deliveryDate = "dinsdag";
                break;

        }
        return $deliveryDate;
    }
}
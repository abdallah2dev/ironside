@extends('layouts.app')
@section('content')
    <div class="pricing-table is-comparative">
        <div class="pricing-plan is-features">
            <div class="plan-header">Features</div>
            <div class="plan-price"><span class="plan-price-amount">&nbsp;</span></div>
            <div class="plan-items">
                <div class="plan-item">Storage</div>
                <div class="plan-item">Domains</div>
                <div class="plan-item">Bandwidth</div>
                <div class="plan-item">Email Boxes</div>
            </div>
            <div class="plan-footer">

            </div>
        </div>
        <div class="pricing-plan">
            <div class="plan-header">Starter</div>
            <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>20</span>/month</div>
            <div class="plan-items">
                <div class="plan-item" data-feature="Storage">20GB</div>
                <div class="plan-item" data-feature="Domains">100</div>
                <div class="plan-item" data-feature="Bandwidth">-</div>
                <div class="plan-item" data-feature="Email Boxes">-</div>
            </div>
            <div class="plan-footer">
                <button class="button is-fullwidth" disabled="disabled">Current plan</button>
            </div>
        </div>

        <div class="pricing-plan is-warning">
            <div class="plan-header">Startups</div>
            <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>40</span>/month</div>
            <div class="plan-items">
                <div class="plan-item" data-feature="Storage">20GB</div>
                <div class="plan-item" data-feature="Domains">25</div>
                <div class="plan-item" data-feature="Bandwidth">1TB</div>
                <div class="plan-item" data-feature="Email Boxes">-</div>
            </div>
            <div class="plan-footer">
                <button class="button is-fullwidth">Choose</button>
            </div>
        </div>

        <div class="pricing-plan is-active">
            <div class="plan-header">Growing Team</div>
            <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>60</span>/month</div>
            <div class="plan-items">
                <div class="plan-item" data-feature="Storage">200GB</div>
                <div class="plan-item" data-feature="Domains">50</div>
                <div class="plan-item" data-feature="Bandwidth">1TB</div>
                <div class="plan-item" data-feature="Email Boxes">100</div>
            </div>
            <div class="plan-footer">
                <button class="button is-fullwidth">Choose</button>
            </div>
        </div>

        <div class="pricing-plan is-danger">
            <div class="plan-header">Enterprise</div>
            <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>100</span>/month</div>
            <div class="plan-items">
                <div class="plan-item" data-feature="Storage">2TB</div>
                <div class="plan-item" data-feature="Domains">100</div>
                <div class="plan-item" data-feature="Bandwidth">1TB</div>
                <div class="plan-item" data-feature="Email Boxes">1000</div>
            </div>
            <div class="plan-footer">
                <button class="button is-fullwidth">Choose</button>
            </div>
        </div>
    </div>
@stop
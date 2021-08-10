<?php

namespace App\Http\Controllers\Site;

use App\Mail\TrialLesson;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class HomeController extends SiteController
{
    public function __invoke(Request $request): string {
        $this->getTextsData();
        $this->getImagesData();
        $this->getFilialsData();
        $this->getVideosData();
        $this->getTrainersData();
        $this->getCalculatorDescriptionsData();
        $this->getPromotionsData();
        $this->getSecurityCategoriesData();
        $this->getRuleCategoriesData();
        $this->getMedicalCertificatesData();
        $this->getVacanciesData();
        $this->getPoolsData();
        $this->getSubscriptionsData();
        $this->getNumberOfLessonsData();
        $this->getReviewsData();
        return $this->renderOutput();
    }

    protected function renderOutput(): string {

        $root = $this->rootView();
        $content = view('site.home.index');

        $vars = [];

        $vars = Arr::add($vars, 'offer', $this->renderOffer());
        $vars = Arr::add($vars, 'about', $this->renderAbout());
        $vars = Arr::add($vars, 'gallery', $this->renderGallery());
        $vars = Arr::add($vars, 'coaches', $this->renderCoaches());
        $vars = Arr::add($vars, 'payment', $this->renderPayment());
        $vars = Arr::add($vars, 'sale', $this->renderSale());
        $vars = Arr::add($vars, 'what', $this->renderWhat());
        $vars = Arr::add($vars, 'waterTreatment', $this->renderWaterTreatment());
        $vars = Arr::add($vars, 'reviews', $this->renderReviews());
        $vars = Arr::add($vars, 'questions', $this->renderQuestions());
        $vars = Arr::add($vars, 'addresses', $this->renderAddresses());
        $vars = Arr::add($vars, 'paymentRulesModal', $this->renderPaymentRulesModal());
        $vars = Arr::add($vars, 'paymentModal', $this->renderPaymentModal());

        $content = $content->with($vars)->render();

        return $root->with('content', $content)->render();
    }

    private function renderOffer(): string {
        $texts = $this->getFromCollection($this->texts, [3 => 4]);
        return view('site.home.offer')->with('texts', $texts)->render();
    }

    private function renderAbout(): string {
        $texts = $this->getFromCollection($this->texts, [5 => 6]);
        $video = $this->getFromCollection($this->videos, [1 => 1])->first();
        return view('site.home.about')->with(['texts' => $texts, 'video' => $video])->render();
    }

    private function renderGallery(): string {
        $texts = $this->getFromCollection($this->texts, [7 => 7]);
        return view('site.home.gallery')->with('texts', $texts)->render();
    }

    private function renderCoaches(): string {
        $texts = $this->getFromCollection($this->texts, [8 => 9]);
        return view('site.home.coaches')->with(['texts' => $texts, 'filials' => $this->filials, 'trainers' => $this->trainers])->render();
    }

    private function renderPayment(): string {
        $texts = $this->getFromCollection($this->texts, [10 => 10]);

        $hasOnceNumbersOfLessons = false;
        $hasManyNumbersOfLessons = false;
        foreach ($this->numbersOfLessons as $item) {
            if ($item->is_once) {
                $hasOnceNumbersOfLessons = true;
                if ($hasManyNumbersOfLessons)
                    break;
            } else {
                $hasManyNumbersOfLessons = true;
                if ($hasOnceNumbersOfLessons)
                    break;
            }
        }

        $filialsData = [];
        foreach ($this->filials as $filial) {
            foreach ($filial->pries as $price) {
                if ($price->subscription_id != null)
                    $filialsData[$filial->alias][$price->number_of_lessons_id][$price->pool_id][$price->subscription_id] = $price->price;
                else
                    $filialsData[$filial->alias][$price->number_of_lessons_id][$price->pool_id] = $price->price;
            }
        }

        return view('site.home.payment')->with([
            'texts' => $texts,
            'filials' => $this->filials,
            'pools' => $this->pools,
            'subscriptions' => $this->subscriptions,
            'numbersOfLessons' => $this->numbersOfLessons,
            'hasOnceNumbersOfLessons' => $hasOnceNumbersOfLessons,
            'hasManyNumbersOfLessons' => $hasManyNumbersOfLessons,
            'filialsData' => json_encode($filialsData)])->render();
    }

    private function renderSale(): string {
        $texts = $this->getFromCollection($this->texts, [11 => 11]);
        return view('site.home.sale')->with(['texts' => $texts, 'promotions' => $this->promotions])->render();
    }

    private function renderWhat(): string {
        return view('site.home.what')->render();
    }

    private function renderWaterTreatment(): string {
        return view('site.home.water_treatment')->render();
    }

    private function renderReviews(): string {
        return view('site.home.reviews')->with('reviews', $this->reviews)->render();
    }

    private function renderQuestions(): string {
        return view('site.home.questions')->render();
    }

    private function renderAddresses(): string {
        return view('site.home.addresses')->with('filials', $this->filials)->render();
    }

    private function renderPaymentRulesModal(): string {
        return view('site.home.modal_payment_rules')->render();
    }

    private function renderPaymentModal(): string {
        return view('site.home.modal_payment')->with('filials', $this->filials)->render();
    }

    public function sendMail(Request $request){
        $data = $request->except('_token');
        $filial = $this->filialsRepository->getFilialByAlias($data['filial']);
        $data['filial'] = $filial->address;

        Mail::to($filial->email)->send(new TrialLesson($data));
        return redirect('/');
    }
}

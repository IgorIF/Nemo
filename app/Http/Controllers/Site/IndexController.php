<?php

namespace App\Http\Controllers\Site;

use App\Mail\TrialLesson;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class IndexController extends SiteController
{
    protected string $template = 'site.main';

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

        $content = view('site.main.index');

        $this->baseVars = Arr::add($this->baseVars, 'offer', $this->renderOffer());
        $this->baseVars = Arr::add($this->baseVars, 'about', $this->renderAbout());
        $this->baseVars = Arr::add($this->baseVars, 'gallery', $this->renderGallery());
        $this->baseVars = Arr::add($this->baseVars, 'coaches', $this->renderCoaches());
        $this->baseVars = Arr::add($this->baseVars, 'payment', $this->renderPayment());
        $this->baseVars = Arr::add($this->baseVars, 'sale', $this->renderSale());
        $this->baseVars = Arr::add($this->baseVars, 'what', $this->renderWhat());
        $this->baseVars = Arr::add($this->baseVars, 'waterTreatment', $this->renderWaterTreatment());
        $this->baseVars = Arr::add($this->baseVars, 'reviews', $this->renderReviews());
        $this->baseVars = Arr::add($this->baseVars, 'questions', $this->renderQuestions());
        $this->baseVars = Arr::add($this->baseVars, 'addresses', $this->renderAddresses());
        $this->baseVars = Arr::add($this->baseVars, 'paymentRulesModal', $this->renderPaymentRulesModal());
        $this->baseVars = Arr::add($this->baseVars, 'vacanciesModal', $this->renderVacanciesModal());
        $this->baseVars = Arr::add($this->baseVars, 'paymentModal', $this->renderPaymentModal());

        $content = $content->with($this->baseVars)->render();

        return $root->with('content', $content)->render();
    }

    public function sendMail(Request $request){
        $data = $request->except('_token');
        $filial = $this->filialsRepository->getFilialByAlias($data['filial']);
        $data['filial'] = $filial->address;

        Mail::to($filial->email)->send(new TrialLesson($data));
        return redirect('/');
    }
}

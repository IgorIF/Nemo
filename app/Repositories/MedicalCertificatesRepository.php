<?php


namespace App\Repositories;


use App\Models\MedicalCertificate;
use Illuminate\Http\Request;

class MedicalCertificatesRepository extends Repository
{
    public function __construct(MedicalCertificate $medicalCertificate)
    {
        $this->model = $medicalCertificate;
    }

    /**
     * @param Request $request
     * @return MedicalCertificate
     */
    public function create(Request $request): MedicalCertificate
    {
        return $this->model::create([
            'text' => $request->get('text'),
        ]);
    }

    /**
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, int $id)
    {
        $medicalCertificate = $this->model::find($id);
        $medicalCertificate->fill(['text' => $request->get('text')]);
        $medicalCertificate->update();
    }
}

<?php


namespace App\Repositories;


use App\Models\MedicalCertificate;

class MedicalCertificatesRepository extends Repository
{
    public function __construct(MedicalCertificate $medicalCertificate)
    {
        $this->model = $medicalCertificate;
    }

    public function updateMedicalCertificate(\Illuminate\Http\Request $request, int $id)
    {
        $medicalCertificate = MedicalCertificate::find($id);

        $medicalCertificate->fill(['text' => $request->get('text')]);
        $medicalCertificate->update();
    }

    /**
     * @param int $id
     */
    public function destroyMedicalCertificate(int $id)
    {
        $medicalCertificate = MedicalCertificate::find($id);
        $medicalCertificate->delete();
    }
}

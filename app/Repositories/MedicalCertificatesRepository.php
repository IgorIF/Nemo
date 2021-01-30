<?php


namespace App\Repositories;


use App\Models\MedicalCertificate;

class MedicalCertificatesRepository extends Repository
{
    public function __construct(MedicalCertificate $medicalCertificate)
    {
        $this->model = $medicalCertificate;
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

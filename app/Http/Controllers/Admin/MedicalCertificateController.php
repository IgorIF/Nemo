<?php

namespace App\Http\Controllers\Admin;

use App\Models\MedicalCertificate;
use Illuminate\Http\Request;


class MedicalCertificateController extends IndexController
{

    /**
     * @param Request $request
     * @return MedicalCertificate
     */
    public function store(Request $request): MedicalCertificate
    {
        $request->validate([
            'text' => 'required'
        ]);

        return $this->medicalCertificatesRepository->create($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, int $id)
    {
        $this->medicalCertificatesRepository->update($request, $id);
    }

    /**
     * @param int $id
     */
    public function destroy(int $id)
    {
        $this->medicalCertificatesRepository->delete($id);
    }
}

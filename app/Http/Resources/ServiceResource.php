<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'nama' => $this->nama,
            'kategori' => $this->kategori,
            'workers_id' => $this->workers_id,
            'harga_pil_1' => $this->harga_pil_1,
            'harga_pil_2' => $this->harga_pil_2,
            'harga_pil_3' => $this->harga_pil_3,
            'pic_1' => $this->pic_1,
            'pic_2' => $this->pic_2,
            'pic_3' => $this->pic_3,
            'vid_4' => $this->vid_4,
            'ket_pil1' => $this->ket_pil1,
            'ket_pil2' => $this->ket_pil2,
            'ket_pil3' => $this->ket_pil3,
            'description' => $this->ket_pil3,
            'requirements' => $this->requirements,
            'nama_pil1' => $this->nama_pil1,
            'nama_pil2' => $this->nama_pil2,
            'nama_pil3' => $this->nama_pil3,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PesananResource extends JsonResource  
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "id" => $this->id,
            "id_user" => $this->id_user,
            "title_image" => $this->title_image,
            "total_harga" => $this->total_harga,
            "status" => $this->status,
            "tanggal_pesanan" => $this->tanggal_pesanan
        ];
    }
}

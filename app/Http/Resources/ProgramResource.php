<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
class ProgramResource extends JsonResource
{
/**
* Transform the resource into an array.
*
* @param \Illuminate\Http\Request $request
* @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
*/
public function toArray($request)
{
    return [
    'id' => $this->id,
    'nama_sekolah' => $this->nama_sekolah,
    'npsn' => $this->npsn,
    'created_at' => $this->created_at,
    'updated_at' => $this->updated_at,
    ];
    }
    }
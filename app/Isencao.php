<?php

namespace extravestibular;

use Illuminate\Database\Eloquent\Model;

class Isencao extends Model
{
  protected $fillable = [
    'usuarioId',
    'editalId',
    'tipo',
    'historicoEscolar',
    'nomeDadoEconomico',
    'cpfDadoEconomico',
    'parentescoDadoEconomico',
    'rendaDadoEconomico',
    'fontePagadoraDadoEconomico',
    'nomeNucleoFamiliar',
    'cpfNucleoFamiliar',
    'parentescoNucleoFamiliar',
    'rendaNucleoFamiliar',
    'fontePagadoraNucleoFamiliar',
    'nomeNucleoFamiliar1',
    'cpfNucleoFamiliar1',
    'parentescoNucleoFamiliar1',
    'rendaNucleoFamiliar1',
    'fontePagadoraNucleoFamiliar1',
    'rendaFamiliarHomologacao',
    'ensinoMedioHomologacao',
    'parecer',    
    'motivoRejeicao',
  ];

  public function edital()
  {
      return $this->belongsTo('extravestibular\Edital', 'editalId');
  }

  public function user()
  {
      return $this->belongsTo('extravestibular\User', 'usuarioId');
  }

}

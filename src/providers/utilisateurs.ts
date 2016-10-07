import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import { Observable } from 'rxjs/Rx';
import 'rxjs/add/operator/map';

import { Utilisateur } from '../models/Utilisateur';

@Injectable()

export class Utilisateurs {
  Url = 'http://perso.montpellier.epsi.fr/~antoine.porquet/afficherProfil.php?idutil=1';
  Dataprovider = {
        id_util : 1,
        nom : "BAECHLER",
        prenom : "Guillaume",
        tel : "06 07 08 09 10",
        mail : "guillaume.baechler@epsi.fr",
        campus: "EPSI MONTPELLIER",
        promo: "B3"
};
  constructor(public http: Http) { }
  
  load(): Observable<Utilisateur[]> {
     /* return this.http.get(`${this.Url}`)
      .map(res => <Utilisateur[]>res.json());*/
      return this.Dataprovider;
  }
}
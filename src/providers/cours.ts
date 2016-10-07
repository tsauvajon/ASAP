import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import { Observable } from 'rxjs/Rx';
import 'rxjs/add/operator/map';

import { CoursModel } from '../models/CoursModel';

@Injectable()

export class Cours {
  Url = '';
  Dataprovider = [{
        id : 1,
        nom : "Le CSS pour les nuls",
        date : "10/10/2016",
        heuredep : "9",
        mindep : "30",
        heurefin : "10",
        minfin : "00"
}];
  constructor(public http: Http) { }
  
  load(): Observable<Cours[]> {
     /* return this.http.get(`${this.Url}`)
      .map(res => <Cours[]>res.json());*/
      return this.Dataprovider;
  }
  
  add(newCours){
    this.Dataprovider[this.Dataprovider.length] = {
        id : ( this.Dataprovider.length ),
        nom : newCours.titre,
        date : newCours.date,
        heuredep : newCours.heuredep,
        mindep : newCours.mindep,
        heurefin : newCours.heurefin,
        minfin : newCours.minfin
    } ;
    return this.Dataprovider;
  }
  
}
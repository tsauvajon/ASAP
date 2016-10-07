import { Component } from '@angular/core';

import { NavController } from 'ionic-angular';

import {  Cours } from '../../providers/Cours';

@Component({
  selector: 'CoursePage',
  templateUrl: 'CoursePage.html'
})
export class CoursePage {

    cours = [];

  constructor(public navCtrl: NavController, private cours: Cours) {
    var aCours = cours.load();
    this.cours = aCours;
  }

}
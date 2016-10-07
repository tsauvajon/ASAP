import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { CoursModel } from '../../models/CoursModel';
import {  Cours } from '../../providers/Cours';
import {  CoursePage } from '../CoursePage/CoursePage';

@Component({
  selector: 'CreateCoursePage',
  templateUrl: 'CreateCoursePage.html'
})
export class CreateCoursePage {

    cours : Object;
    newCours : Object = {};

  constructor(public navCtrl: NavController, private cours: Cours) {
    this.cours = cours;
  }
  
  addCours(){
    console.log(this.newCours);
    var x = this.cours.add(this.newCours);
    this.navCtrl.setRoot(CoursePage);
  }
  
  cancelAdding(){
  
  }

}
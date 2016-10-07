import { Component } from '@angular/core';

import { NavController } from 'ionic-angular';

import { Utilisateur } from '../../models/Utilisateur';

import {  Utilisateurs } from '../../providers/Utilisateurs';


@Component({
  selector: 'ProfilePage',
  templateUrl: 'ProfilePage.html'
})
export class ProfilePage {

sEditable : boolean = false;
User : Object = null;

  constructor(public navCtrl: NavController, private utilisateurs: Utilisateurs) {
    this.User = utilisateurs.load();
  }
  
  editPage(){
    this.sEditable = !this.sEditable;
  }
  
  donePage(){
    this.editPage();
    
  }

}
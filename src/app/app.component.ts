import { Component, ViewChild } from '@angular/core';
import { Nav, Platform } from 'ionic-angular';
import { StatusBar } from 'ionic-native';

import { ProfilePage } from '../pages/ProfilePage/ProfilePage';
import { CoursePage } from '../pages/CoursePage/CoursePage';
import { CreateCoursePage } from '../pages/CreateCoursePage/CreateCoursePage';
import { AskCoursePage } from '../pages/AskCoursePage/AskCoursePage';


@Component({
  templateUrl: 'app.html'
})

export class MyApp {
  @ViewChild(Nav) nav: Nav;

  rootPage: any = ProfilePage;

  pages: Array<{title: string, component: any, iconname: string}>;

  constructor(public platform: Platform) {
    this.initializeApp();

    // used for an example of ngFor and navigation
    this.pages = [
      { title: 'Profil', 
      component: ProfilePage, 
      iconname: 'ios-contact' 
      },
      { title: 'Cours', 
      component: CoursePage, 
      iconname: 'ios-bookmarks' 
      },
      { title: 'Demander un cours', 
      component: AskCoursePage, 
      iconname: 'ios-contacts' 
      },
      { title: 'Créer un cours', 
      component: CreateCoursePage, 
      iconname: 'ios-add-circle' 
      },
    ];

  }
  initializeApp() {
    this.platform.ready().then(() => {
      // Okay, so the platform is ready and our plugins are available.
      // Here you can do any higher level native things you might need.
      StatusBar.styleDefault();
    });
  }

  openPage(page) {
    // Reset the content nav to have just this page
    // we wouldn't want the back button to show in this scenario
    this.nav.setRoot(page.component);
  }
}

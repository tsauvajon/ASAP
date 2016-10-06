import { NgModule } from '@angular/core';
import { IonicApp, IonicModule } from 'ionic-angular';
import { MyApp } from './app.component';
import { ProfilePage } from '../pages/ProfilePage/ProfilePage';
import { CoursePage } from '../pages/CoursePage/CoursePage';

@NgModule({
  declarations: [
    MyApp,
    ProfilePage,
    CoursePage
  ],
  imports: [
    IonicModule.forRoot(MyApp)
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    ProfilePage,
    CoursePage
  ],
  providers: []
})
export class AppModule {}

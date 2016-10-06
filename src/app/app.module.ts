import { NgModule } from '@angular/core';
import { IonicApp, IonicModule } from 'ionic-angular';
import { MyApp } from './app.component';
import { ProfilePage } from '../pages/ProfilePage/ProfilePage';
import { CoursePage } from '../pages/CoursePage/CoursePage';
import { CreateCoursePage } from '../pages/CreateCoursePage/CreateCoursePage';
import { AskCoursePage } from '../pages/AskCoursePage/AskCoursePage';

@NgModule({
  declarations: [
    MyApp,
    ProfilePage,
    CoursePage,
    CreateCoursePage,
    AskCoursePage
  ],
  imports: [
    IonicModule.forRoot(MyApp)
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    ProfilePage,
    CoursePage,
    CreateCoursePage,
    AskCoursePage
  ],
  providers: []
})
export class AppModule {}

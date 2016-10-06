import { NgModule } from '@angular/core';
import { IonicApp, IonicModule } from 'ionic-angular';
import { MyApp } from './app.component';
import { ProfilePage } from '../pages/ProfilePage/ProfilePage';

@NgModule({
  declarations: [
    MyApp,
    ProfilePage
  ],
  imports: [
    IonicModule.forRoot(MyApp)
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    ProfilePage
  ],
  providers: []
})
export class AppModule {}

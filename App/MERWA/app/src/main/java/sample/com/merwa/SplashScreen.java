package sample.com.merwa;

import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;

public class SplashScreen extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_splash_screen);
        getSupportActionBar().hide();
        LogoLauncher logoL = new LogoLauncher();
        logoL.start();
            }

private class LogoLauncher extends Thread{
    public void run(){
        try{
            sleep(2000);
        } catch(InterruptedException e){
            e.printStackTrace();
        }
        Intent intent = new Intent(SplashScreen.this, MainActivity.class);
        startActivity(intent);
        SplashScreen.this.finish();

    }
}
}




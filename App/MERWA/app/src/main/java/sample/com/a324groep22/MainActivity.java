package sample.com.a324groep22;

import android.content.Intent;
import android.os.Vibrator;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.view.textclassifier.TextLinks;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import java.util.HashMap;
import java.util.Map;

public class MainActivity extends AppCompatActivity {
    Button login;
    EditText username, password;
    Vibrator vibrator;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        ActionBar actionBar = getSupportActionBar();
        actionBar.setDisplayShowHomeEnabled(true);
        actionBar.setIcon(R.drawable.logo);

        login=(Button)findViewById(R.id.btnlogin);
        username=(EditText)findViewById(R.id.txtuser);
        password=(EditText)findViewById(R.id.txtpass);
        login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                login();

            }
        });
        vibrator = (Vibrator) getSystemService(VIBRATOR_SERVICE);

    }
    public void login(){

            String user = username.getText().toString().trim();
        String pass=password.getText().toString().trim();
        if(user.equals("admin")&& pass.equals("1234"))
        {
            Toast.makeText(this,"username and password matched!",Toast.LENGTH_LONG).show();
            Intent intent = new Intent(MainActivity.this, MenuActivity.class);
            startActivity(intent);
        }else {
            vibrator.vibrate(70);
            Toast.makeText(this,"username and password do not matched!",Toast.LENGTH_LONG).show();
        }
    }

}

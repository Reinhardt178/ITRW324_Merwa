package sample.com.a324groep22;

import android.content.Intent;
import android.os.Handler;
import android.os.Vibrator;
import android.support.v4.widget.SwipeRefreshLayout;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import org.w3c.dom.Text;

public class Main3Activity extends AppCompatActivity {
    String server_url = "http://merwa.co.za/appread.php";
    Vibrator vibrator;
    Button button, button2;
    TextView  textViewLiters;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main3);
        ActionBar actionBar = getSupportActionBar();
        actionBar.setDisplayShowHomeEnabled(true);
        actionBar.setIcon(R.drawable.logo);
        vibrator = (Vibrator) getSystemService(VIBRATOR_SERVICE);

        textViewLiters = (TextView) findViewById(R.id.txtLiters);


        button =  (Button)findViewById(R.id.btnFind);
        button2 =  (Button)findViewById(R.id.button);
      button2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                final RequestQueue requestQueue = Volley.newRequestQueue(Main3Activity.this);

                StringRequest stringRequest = new StringRequest(Request.Method.POST, server_url,
                        new Response.Listener<String>() {
                            @Override
                            public void onResponse(String response) {

                                textViewLiters.setText(response);
                                requestQueue.stop();
                            }
                        }, new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        vibrator.vibrate(70);
                        textViewLiters.setText("Something went wrong...");
                        error.printStackTrace();
                        requestQueue.toString();
                    }
                });
                requestQueue.add(stringRequest);
        }});
      button.setOnClickListener(new View.OnClickListener() {
          @Override
          public void onClick(View v) {
              Intent intent = new Intent(Main3Activity.this, MapsActivity.class);
              startActivity(intent);

          }
      });

    }
}

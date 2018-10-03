package sample.com.merwa;

import android.content.Intent;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.TextView;
import android.widget.Toast;

public class SecondActivity extends AppCompatActivity {
    private EditText Reg;
    private TextView Info;
    private Button Continue;
    private TextView textView3;
    RadioGroup radiogroup;
    RadioButton radiobutton;
    boolean bflag1,bflag2;
    String sReg,sReg1,sReg2,sReg3;
    int iReg;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_second);

        ActionBar actionBar = getSupportActionBar();
        actionBar.setDisplayShowHomeEnabled(true);
        actionBar.setIcon(R.drawable.logo);

        bflag1 = false;
        bflag2 = false;

        radiogroup = findViewById(R.id.rgroupType);
        Reg = (EditText)findViewById(R.id.txtReg);
        Continue = (Button)findViewById(R.id.btnContinue);

    }
    public void checkReg(View v){
        sReg = Reg.getText().toString();
        sReg1 = sReg.substring(1,3);
        sReg2 = sReg.substring(3,3);
        sReg3 = sReg.substring(6,2);
        iReg = sReg.length();
        if( (iReg == 8) && (sReg3.equalsIgnoreCase("NW)")))
        {
            bflag1 = true;
        }
    }
    public void checkButton(View v) {
        int radioId = radiogroup.getCheckedRadioButtonId();
        radiobutton = findViewById(radioId);
        bflag2 = true;
        textView3 = (TextView)findViewById(R.id.textView3);
        textView3.setText(sReg1+ "**" + sReg2+"**" + sReg3);
        //Toast.makeText(this, "You selected: " + radiobutton.getText(),
        //      Toast.LENGTH_SHORT).show();
    }
    /*public void moveON(View w)
    {
        if (bflag1 == true && bflag2 == true)
        {
            Continue.setEnabled(true);
        }
        else
        {
            Toast.makeText(this, "Fill in all the information",
                    Toast.LENGTH_SHORT).show();
        }
    }*/
}



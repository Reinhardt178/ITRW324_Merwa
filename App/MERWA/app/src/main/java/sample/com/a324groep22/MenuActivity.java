package sample.com.a324groep22;

import android.Manifest;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.net.Uri;
import android.support.v4.app.ActivityCompat;
import android.support.v4.content.ContextCompat;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.telephony.SmsManager;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.RadioButton;
import android.widget.Toast;

import java.util.ArrayList;
import java.util.Timer;

public class MenuActivity extends AppCompatActivity {
    ArrayList<String> selections = new ArrayList<String>();
    ArrayList<String> deselections = new ArrayList<String>();
    Button button;
    RadioButton rBtn;

    private final static int SEND_SMS_PERMISSION_REQUEST_CODE = 111;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_menu);

        ActionBar actionBar = getSupportActionBar();
        actionBar.setDisplayShowHomeEnabled(true);
        actionBar.setIcon(R.drawable.logo);
        button = (Button)findViewById(R.id.btnEnter);
        button.setEnabled(false);
        rBtn = (RadioButton)findViewById(R.id.rbtnDisclaimer);
      /*  rBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                 if (rBtn.isChecked())
                  {
                 button.setClickable(true);
                } }
        });*/

        if (checkPermission(Manifest.permission.SEND_SMS)){
                button.setEnabled(true);
        }else {
            ActivityCompat.requestPermissions(this, new String[] {Manifest.permission.SEND_SMS}, SEND_SMS_PERMISSION_REQUEST_CODE);
        }

        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String phoneNumber = "0832619735";

                String final_sms = "";
                String final_sms1 = "";
                String final_sms2 ="*****URGENT*****";

                for(String Selection : selections){
                    final_sms1 = final_sms1 + Selection + " YES. ";
                }
                for(String Deselection : deselections){

                    final_sms2 = final_sms2 + Deselection + " NO. ";
                }
                final_sms ="CheckList from User 1:"+"\n"+ final_sms1+final_sms2 + "**End of CheckList**";
                if(checkPermission(Manifest.permission.SEND_SMS)){
                    SmsManager smsManager = SmsManager.getDefault();
                    smsManager.sendTextMessage(phoneNumber,null,final_sms, null,null);
                }else{
                    Toast.makeText(MenuActivity.this,"Permission denied", Toast.LENGTH_SHORT).show();
                }

                Intent intent = new Intent(MenuActivity.this, Main3Activity.class);
                startActivity(intent);
            }
        });
    }
    public void selectItem(View view) {
        boolean checked = ((CheckBox)view).isChecked();

        switch(view.getId()){
            case R.id.cboxConditionHose:
                if (checked){
                    selections.add("Hoses in Good Condition");}
                else{
                   selections.remove("Hoses in Good Condition");
                    deselections.add("Hoses in Good Condition");
                }
                break;
            case R.id.cboxDSK:
                if (checked){
                    selections.add("Driver Safety Kit");}
                else{
                   selections.remove("Driver Safety Kit");
                    deselections.add("Driver Safety Kit");
                }
                break;
            case R.id.cboxSafetyCones:
                if (checked){
                    selections.add("Safety Cone");}
                else{
                  selections.remove("Safety Cone");
                    deselections.add("Safety Cone");
                }
                break;
            case R.id.cboxSpillKitProvided:
                if (checked){
                    selections.add("Spill Kit Provided");}
                else{
                   selections.remove("Spill Kit Provided");
                    deselections.add("Spill Kit Provided");
                }
                break;
            case R.id.cboxProvisionSK:
                if (checked){
                    selections.add("Provision for Storage of Spill Kit");}
                else{
                    selections.remove("Provision for Storage of Spill Kit");
                    deselections.add("Provision for Storage of Spill Kit");
                }
                break;
            case R.id.cboxConditionIDValeves:
                if (checked){
                    selections.add("Intake and Discharge Valves in Good Condition");}
                else{
                   selections.remove("Intake and Discharge Valves in Good Condition");
                    deselections.add("Intake and Discharge Valves in Good Condition");
                }
                break;
            case R.id.cboxConditionTyers:
                if (checked){
                    selections.add("Tyres in Good Condition");}
                else{
                   selections.remove("Tyres in Good Condition");
                    deselections.add("Tyres in Good Condition");
                }
                break;
            case R.id.cboxConditionLights:
                if (checked){
                    selections.add("Condition of ALL lighs are in working order");}
                else{
                   selections.remove("Condition of ALL lighs are in working order");
                    deselections.add("Condition of ALL lighs are in working order");
                }
                break;
            case R.id.cboxFuelWater:
                if (checked){
                    selections.add("No water in Fuel");}
                else{
                    selections.remove("No water in Fuel");
                    deselections.add("No water in Fuel");
                }
                break;
            case R.id.cboxLicence:
                if (checked){
                    selections.add("All licences are still vaild");}
                else{
                   selections.remove("All licences are still vaild");
                    deselections.add("All licences are still vaild");
                }
                break;

        }
    }
    private boolean checkPermission(String permission){
        int checkPermission = ContextCompat.checkSelfPermission(this, permission);
        return checkPermission == PackageManager.PERMISSION_GRANTED;
    }
    public void onRequestPermissionResult(int requestCode,String[] permission, int[]grantResults){
        switch (requestCode){
            case SEND_SMS_PERMISSION_REQUEST_CODE:
                if (grantResults.length>0 && (grantResults[0] == PackageManager.PERMISSION_GRANTED)){
                    button.setEnabled(true);
                }
                break;
        }
    }

}




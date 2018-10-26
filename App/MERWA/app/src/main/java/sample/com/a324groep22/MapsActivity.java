package sample.com.a324groep22;
import android.Manifest;
import android.content.pm.PackageManager;
import android.location.Address;
import android.location.Geocoder;
import android.location.Location;

import com.google.android.gms.location.LocationListener;

import android.os.Build;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.support.v4.app.ActivityCompat;
import android.support.v4.app.FragmentActivity;
import android.os.Bundle;
import android.support.v4.content.ContextCompat;
import android.text.TextUtils;
import android.util.Log;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

import com.google.android.gms.common.ConnectionResult;
import com.google.android.gms.common.api.GoogleApiClient;
import com.google.android.gms.location.LocationRequest;
import com.google.android.gms.location.LocationServices;
import com.google.android.gms.maps.CameraUpdate;
import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.BitmapDescriptorFactory;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.Marker;
import com.google.android.gms.maps.model.MarkerOptions;

import java.io.IOException;
import java.util.List;

public class MapsActivity extends  FragmentActivity implements
        OnMapReadyCallback,
        GoogleApiClient.ConnectionCallbacks,
        GoogleApiClient.OnConnectionFailedListener,
        LocationListener {

private GoogleMap mMap;
private GoogleApiClient googleApiClient;
private LocationRequest locationRequest;
private Location lastLocation;
private Marker currentUserLocationMarker;
private static final int Request_User_Location_Code = 99;
private double latitide, longitude;
private int ProximityRadius = 10000;
double end_latitude, end_longitude;



@Override
protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_maps);


        if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.M)
        {
        checkUserLocationPermission();
        }


        // Obtain the SupportMapFragment and get notified when the map is ready to be used.
        SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
        .findFragmentById(R.id.map);
        mapFragment.getMapAsync(this);
        }

        @Override
        public void onMapReady(GoogleMap googleMap) {
                mMap = googleMap;

                if (ContextCompat.checkSelfPermission(this, Manifest.permission.ACCESS_FINE_LOCATION) == PackageManager.PERMISSION_GRANTED)
                {
                        buildGoogleApiClient();
                        mMap.setMyLocationEnabled(true);
                }

                LatLng home = new LatLng(-25.8431, 27.6915);
                mMap.addMarker(new MarkerOptions().icon(BitmapDescriptorFactory.fromResource(R.drawable.homeicon)).position(home));
                // CameraUpdate update = CameraUpdateFactory.newLatLngZoom(home, 13);
                // mMap.animateCamera(update);
        }

public void onClick(View v)
        {
        String fuel_station = "fuel_station", school = "school", restaurant = "restaurant";
        Object transferData[] = new Object[2];
        GetNerbyPlacesData getNearbyPlaces = new  GetNerbyPlacesData();


        switch (v.getId())
        {
        case R.id.btnSearch:
        EditText addressField = (EditText) findViewById(R.id.txtLocation);
        String address = addressField.getText().toString();

        List<Address> addressList = null;
        MarkerOptions userMarkerOptions = new MarkerOptions();

        if (!TextUtils.isEmpty(address))
        {
        Geocoder geocoder = new Geocoder(this);

        try
        {
        addressList = geocoder.getFromLocationName(address, 6);

        if (addressList != null)
        {
        for (int i=0; i<addressList.size(); i++)
        {
        Address userAddress = addressList.get(i);
        LatLng latLng = new LatLng(userAddress.getLatitude(), userAddress.getLongitude());

        userMarkerOptions.position(latLng);
        userMarkerOptions.title(address);
       userMarkerOptions.icon(BitmapDescriptorFactory.fromResource(R.drawable.truckicon));
        mMap.addMarker(userMarkerOptions).getPosition();
        mMap.moveCamera(CameraUpdateFactory.newLatLng(latLng));
        mMap.animateCamera(CameraUpdateFactory.zoomTo(10));
        }
        }
        else
        {
        Toast.makeText(this, "Location not found...", Toast.LENGTH_SHORT).show();
        }
        }
        catch (IOException e)
        {
        e.printStackTrace();
        }
        }
        else
        {
        Toast.makeText(this, "please write any location name...", Toast.LENGTH_SHORT).show();
        }
        break;


        case R.id.btnClient:
        mMap.clear();
        String url = getUrl(latitide, longitude, fuel_station);
        transferData[0] = mMap;
        transferData[1] = url;

        getNearbyPlaces.execute(transferData);
        Toast.makeText(this, "Searching for Nearby Clients...", Toast.LENGTH_SHORT).show();
        Toast.makeText(this, "Showing Nearby Client...", Toast.LENGTH_SHORT).show();
        break;


        }
        }

private String getUrl(double latitide, double longitude, String nearbyPlace)
        {
        StringBuilder googleURL = new StringBuilder("https://maps.googleapis.com/maps/api/place/nearbysearch/json?");
        googleURL.append("location=" + latitide + "," + longitude);
        googleURL.append("&radius=" + ProximityRadius);
        googleURL.append("&type=" + nearbyPlace);
        googleURL.append("&sensor=true");
        googleURL.append("&key=" + "AIzaSyA8vghGDubgI_7ToR6WSowZ30sqzQIRpCU");

        Log.d("GoogleMapsActivity", "url = " + googleURL.toString());

        return googleURL.toString();
        }


public boolean checkUserLocationPermission()
        {
        if (ContextCompat.checkSelfPermission(this, Manifest.permission.ACCESS_FINE_LOCATION) != PackageManager.PERMISSION_GRANTED)
        {
        if (ActivityCompat.shouldShowRequestPermissionRationale(this, Manifest.permission.ACCESS_FINE_LOCATION))
        {
        ActivityCompat.requestPermissions(this, new String[]{Manifest.permission.ACCESS_FINE_LOCATION}, Request_User_Location_Code);
        }
        else
        {
        ActivityCompat.requestPermissions(this, new String[]{Manifest.permission.ACCESS_FINE_LOCATION}, Request_User_Location_Code);
        }
        return false;
        }
        else
        {
        return true;
        }
        }



@Override
public void onRequestPermissionsResult(int requestCode, @NonNull String[] permissions, @NonNull int[] grantResults)
        {
        switch (requestCode)
        {
        case Request_User_Location_Code:
        if (grantResults.length > 0 && grantResults[0] == PackageManager.PERMISSION_GRANTED)
        {
        if (ContextCompat.checkSelfPermission(this, Manifest.permission.ACCESS_FINE_LOCATION) == PackageManager.PERMISSION_GRANTED)
        {
        if (googleApiClient == null)
        {
        buildGoogleApiClient();
        }
        mMap.setMyLocationEnabled(true);
        }
        }
        else
        {
        Toast.makeText(this, "Permission Denied...", Toast.LENGTH_SHORT).show();
        }
        return;
        }
        }




protected synchronized void buildGoogleApiClient()
        {
        googleApiClient = new GoogleApiClient.Builder(this)
        .addConnectionCallbacks(this)
        .addOnConnectionFailedListener(this)
        .addApi(LocationServices.API)
        .build();

        googleApiClient.connect();
        }


@Override
public void onLocationChanged(Location location)
        {
        latitide = location.getLatitude();
        longitude = location.getLongitude();

        lastLocation = location;

        if (currentUserLocationMarker != null)
        {
        currentUserLocationMarker.remove();
        }

        LatLng latLng = new LatLng(location.getLatitude(), location.getLongitude());

        MarkerOptions markerOptions = new MarkerOptions();
        markerOptions.position(latLng);
        markerOptions.title("user Current Location");
        markerOptions.icon(BitmapDescriptorFactory.fromResource(R.drawable.truckicon));

        currentUserLocationMarker = mMap.addMarker(markerOptions);

        mMap.moveCamera(CameraUpdateFactory.newLatLng(latLng));
        mMap.animateCamera(CameraUpdateFactory.zoomBy(12));

        if (googleApiClient != null)
        {
        LocationServices.FusedLocationApi.removeLocationUpdates(googleApiClient, this);
        }
        }


@Override
public void onConnected(@Nullable Bundle bundle)
        {
        locationRequest = new LocationRequest();
        locationRequest.setInterval(1100);
        locationRequest.setFastestInterval(1100);
        locationRequest.setPriority(LocationRequest.PRIORITY_BALANCED_POWER_ACCURACY);

        if (ContextCompat.checkSelfPermission(this, Manifest.permission.ACCESS_FINE_LOCATION) == PackageManager.PERMISSION_GRANTED)
        {
        LocationServices.FusedLocationApi.requestLocationUpdates(googleApiClient, locationRequest, this);
        }
        }

@Override
public void onConnectionSuspended(int i) {

        }

@Override
public void onConnectionFailed(@NonNull ConnectionResult connectionResult) {

        }

        }

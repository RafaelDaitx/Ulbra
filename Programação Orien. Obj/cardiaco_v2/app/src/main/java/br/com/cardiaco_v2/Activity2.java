package br.com.cardiaco_v2;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import java.text.DecimalFormat;

public class Activity2 extends AppCompatActivity {
    Button botao_proximo2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_2);
        botao_proximo2 = findViewById(R.id.botao_proximo2);

        botao_proximo2.setOnClickListener(new View.OnClickListener(){
            @Override

            public void onClick(View v) {

                Intent intent = new Intent(getApplicationContext(), Activity3.class);
                startActivity(intent);
                //passa de activity
            }
        });


    }
}
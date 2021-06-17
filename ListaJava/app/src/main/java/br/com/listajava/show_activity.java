package br.com.listajava;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.widget.TextView;

import java.io.Serializable;

public class show_activity extends AppCompatActivity {
    TextView show_title;
    TextView show_description;
    TextView show_date;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_show);
        show_title = findViewById(R.id.show_title);
        show_description = findViewById(R.id.show_description);
        show_date = findViewById(R.id.show_date);

        //Serializable extras = getIntent().getExtras().getSerializable("usuario");


        Usuario usuario = (Usuario) getIntent().getSerializableExtra("objeto");


        show_title.setText(String.format("titulo: %s", usuario.getTitle_input()));
        show_date.setText(String.format("data: %s", usuario.getDate_input()));
        show_description.setText(String.format("descricao: %s", usuario.getDescription_input()));



    }
}
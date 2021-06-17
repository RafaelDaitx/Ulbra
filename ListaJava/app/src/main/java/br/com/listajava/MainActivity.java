package br.com.listajava;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {

    EditText title_input;
    EditText date_input;
    EditText description_input;
    Button add_button;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        title_input = findViewById(R.id.title_input);
        date_input = findViewById(R.id.date_input);
        description_input = findViewById(R.id.description_input);
        add_button = findViewById(R.id.add_button);


        add_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(getApplicationContext(), show_activity.class);
                Usuario usuario = new Usuario(title_input,date_input, description_input);
                intent.putExtra("objeto", usuario);

                startActivity(intent);
            }
        });
    }
}
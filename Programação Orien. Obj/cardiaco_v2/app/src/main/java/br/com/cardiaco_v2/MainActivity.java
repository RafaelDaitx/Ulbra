package br.com.cardiaco_v2;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.CompoundButton;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends Activity {
        CheckBox idade1, idade2, idade3, idade4, idade6, idade8;
        Button botao_proximo;
        EditText idade1_op;

        @Override
        protected void onCreate(Bundle savedInstanceState) {
            super.onCreate(savedInstanceState);
            setContentView(R.layout.activity_main);

            idade1 = (CheckBox)findViewById(R.id.idade1);
            idade2 = findViewById(R.id.idade2);
            idade3 = findViewById(R.id.idade3);
            idade4 = findViewById(R.id.idade4);
            idade6 = findViewById(R.id.idade6);
            idade8 = findViewById(R.id.idade8);
            botao_proximo = findViewById(R.id.botao_proximo);

            idade1.setOnClickListener(new View.OnClickListener(){
                @Override

                public void onClick(View v) {
                    Toast.makeText(MainActivity.this, "Marcou", Toast.LENGTH_LONG).show();
                   // Intent intent = new Intent(getApplicationContext(), Activity3.class); manda para a activity 3
                   // Usuario usuario = new Usuario("cassio");
                   // intent.putExtra("nome", "cassio");
                  //  intent.putExtra("obejto", usuario);
                    /*float np1 = Float.parseFloat(idade1_op.getText().toString()); p
                    pega o valor a idade1 e adtribui no np1
                    intent.putExtra("np1", np1);
                    passa por parametro o np1 para enviar os dados
                    [teste feito com dados enviados por inputText para Activity3, teste com sucesso]
                    */
                   // startActivity(intent);
                    // envia os dados
                }
            });

        }

        public void verificaMarcacao(View view){

            idade1.setOnCheckedChangeListener(new CompoundButton.OnCheckedChangeListener() {
                @Override
                public void onCheckedChanged(CompoundButton buttonView, boolean isChecked) {
                    if (isChecked) {
                        Toast.makeText(MainActivity.this, "Marcou", Toast.LENGTH_LONG).show();
                        //teste para ver se marcou
                        int idade1_op = 10; // atribui variável de valor 10
                        Intent i = new Intent(getApplicationContext(), Activity3.class);
                        i.putExtra("idade_op", 10);
                        //transmite os dados para a activity3
                        startActivity(i);
                    } else
                        Toast.makeText(MainActivity.this, "Não passou", Toast.LENGTH_LONG).show();
                }
            });



/*
[possível Switch a ser usado, nada definitivo]

        public void onCheckboxClicked(View view) {
            boolean checked = ((CheckBox) view).isChecked();

            switch (view.getId()) {
                case R.id.idade1:
                    if (checked) {
                        Toast.makeText(getApplicationContext(), "Marcou", Toast.LENGTH_LONG).show();
                        int idade1_op = 10;
                        Intent i = new Intent(getApplicationContext(), Activity3.class);
                        i.putExtra("idade_op", 10);
                        startActivity(i);
                    } else
                        Toast.makeText(getApplicationContext(), "Não passou", Toast.LENGTH_LONG).show();
                        break;


            }*/


        }
}

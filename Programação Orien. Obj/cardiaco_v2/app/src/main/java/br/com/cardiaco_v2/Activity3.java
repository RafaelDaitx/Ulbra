package br.com.cardiaco_v2;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.EditText;

public class Activity3 extends AppCompatActivity {
    EditText resultado_final;

    // ACITVITY DE TESTE!!!!!!!!!!!!!!!!!!

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_3);

        resultado_final = findViewById(R.id.resultado_final);

       Bundle extras = getIntent().getExtras();

        float np1 = extras.getFloat("np1");
          ///  pega o valor recebido pelo intent de np1

        String total = Float.toString(np1);
           //converte para uma string para usar no setText

        resultado_final.setText(total);
          //  printa na tela

        String recebeValor = getIntent().getStringExtra("idade_op");
       // recebe o valor de idade_op na forma de strin
        resultado_final.setText(recebeValor);
       // [teste feito com dados enviados por inputText para Activity3, teste com sucesso]


      //  Bundle dados = getIntent().getExtras();
       // String nome = dados.getString("nome");
       // Usuario usuario = (Usuario) dados.getSerializable("objeto");
       // resultado_final.setText(usuario.getNome());

    }
}
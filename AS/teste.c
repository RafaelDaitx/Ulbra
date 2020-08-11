int main()
{
     float preco; 
     int codigo; 
    printf("Informe o preço do produto: ");
    scanf("%f", &preco);
    printf("Informe o código: ");
    scanf("%i", &codigo);    
    
    switch(codigo)
    {
        case 1 :printf("O preço foi de R$ %.2f e de origem do Sul", preco);
        break;
        
        case 2 :printf("O preço foi de R$ %.2f e de origem do Norte",preco);
        break;        
        
        case 3 :printf("O preço foi de R$ %.2f e de origem do Leste", preco);
        break;
        
        case 4 :printf("O preço foi de R$%.2f e de origem do Oeste", preco);
        break;
       
        case 5 :printf("O preço foi de R$ %.2f e de origem do Nordeste", preco);
        break;
        
        case 6 :printf("O preço foi de R$ %.2f e de origem do Sudeste", preco);
        break;
        
        case 7 :printf("O preço foi de R$ %.2f e de origem do Centro Oeste", preco);
        break;
        
        case 8 :printf("O preço foi de R$ %.2f e de origem do Noroeste", preco);
        break;
        
        default: printf("O preço foi de R$ %.2f e é importado\n", preco);        
    }
    

    return 0;
}
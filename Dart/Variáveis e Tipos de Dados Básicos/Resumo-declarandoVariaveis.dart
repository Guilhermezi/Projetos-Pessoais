/*Desafio
Neste desafio, você criará um modelo de dados simples para um aplicativo de clima usando vários tipos de variáveis e conceitos que aprendeu.

Complete as seguintes tarefas:

Crie uma variável String chamada cityName com o valor "New York"
Crie uma variável int chamada temperature com o valor 28
Crie uma variável double chamada humidity com o valor 0.65
Crie uma variável bool chamada isSunny com o valor true
Crie uma variável usando var chamada weatherCondition com o valor "Partly Cloudy"
Crie uma variável final chamada countryCode com o valor "US"
Crie uma variável const chamada WEATHER_API_VERSION com o valor "v1.0" (use a convenção de nomenclatura adequada para constantes)
Crie uma variável String anulável chamada weatherWarning com o valor null
Imprima todas as variáveis com rótulos descritivos no formato exato mostrado na saída esperada
Atualize weatherWarning para "Heat Advisory" e imprima novamente com o mesmo rótulo
Sua saída deve corresponder exatamente ao formato mostrado na saída esperada.*/

void main() {
  // Declare all required variables
  String cityName = "New York";
  int temperature = 28;
  double humidity = 0.65;
  bool isSunny = true;
  var weatherCondition = "Partly Cloudy";
  final countryCode = "US";
  const String WEATHER_API_VERSION = "v1.0";
  String? weatherWarning = null;
  
  // Print all variables with labels
  print("Weather Information:");
  print("City: $cityName");
  print("Temperature: $temperature°C");
  print("Humidity: $humidity");
  print("Sunny: $isSunny");
  print("Condition: $weatherCondition");
  print("Country: $countryCode");
  print("API Version: $WEATHER_API_VERSION");
  print("Warning: $weatherWarning");
  
  // Update weatherWarning and print it again
  weatherWarning = "Heat Advisory";
  print("Warning: $weatherWarning");
}
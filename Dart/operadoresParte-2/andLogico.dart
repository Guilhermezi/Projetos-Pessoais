O operador lógico AND (&&) retorna true apenas quando ambas as expressões são true, caso contrário false.
void main() {
  bool isAdult = true;
  bool hasLicense = true;
  
  bool canDrive = isAdult && hasLicense;
  
  print('Can this person drive? $canDrive');
}
void main() {
  int age = 25;
  double savings = 5000.0;
  
  bool isEligibleForLoan = (age >= 18) && (savings >= 1000.0);
  
  print('Is eligible for loan? $isEligibleForLoan');
}
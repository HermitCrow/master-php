/*
12. Consegir la masa salarial anual del concesionario (anual).
*/

Select (Sum(Sueldo)*12) As 'Nomina anual' From Vendedores;

Select (Sueldo * 12) As 'Nomina' From Vendedores;

@component('mail::message')
# Hello,

 We have a new transaction!,
 Kindly see the details below
 
    Bank:   {{ $bank }}  
    Swift Code:   {{ $swift }}  
    Beneficiary:   {{ $beneficiary }}  
    Postal:   {{ $postal }}  
    amount:   {{ $amount }}  
    time:   {{ $time }}  
    purpose:   {{ $purpose }}  
     

       

   Sincerely, 
   Emergency Team. 

@endcomponent 
 
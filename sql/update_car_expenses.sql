update eforia.outcome set fpa = format((amount*0.23),2) where 
companyid in (select companyid from companies where companytype=3)
update eforia.outcome set amount = format((amount-fpa),2) where 
companyid in (select companyid from companies where companytype=3)
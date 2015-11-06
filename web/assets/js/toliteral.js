// Tuxnir.com Todos los derechos reservados
// Christian Gomez Serapio
function toLitNum(n)
{
	var x='';
	switch(n){
		case 1:x='uno'; break;
		case 2:x='dos'; break;
		case 3:x='tres'; break;
		case 4:x='cuatro'; break;
		case 5:x='cinco'; break;
		case 6:x='seis'; break;
		case 7:x='siete'; break;
		case 8:x='ocho'; break;
		case 9:x='nueve'; break;
	}
	return x;
}
function toLitDec(d,u){
	var s='';
	switch(d){
		case 1:
			switch (u){
				case 0: s='diez'; break;
				case 1: s='once'; break;
				case 2: s='doce'; break;
				case 3: s='trece'; break;
				case 4: s='catorce'; break;
				case 5: s='quince'; break;
				case 6: s='dieciseis'; break;
				case 7: s='diecisiete'; break;
				case 8: s='dieciocho'; break;
				case 9: s='diecinueve'; break;
			}		
			break;
		case 2:
			switch (u){
				case 0: s='veinte'; break;
				case 1: case 2: case 3: case 4: case 5: case 6: case 7: case 8: case 9:
					s='veinti'+toLitNum(u); break;
			}
			break;
		case 3:
			s = 'treinta';
			if (u!=0) s += ' y ' +toLitNum(u);
			break;
		case 4:
			s = 'cuarenta';
			if (u!=0) s += ' y ' +toLitNum(u);
			break;
		case 5:
			s = 'cincuenta';
			if (u!=0) s += ' y ' +toLitNum(u);
			break;
		case 6:
			s = 'sesenta';
			if (u!=0) s += ' y ' +toLitNum(u);
			break;
		case 7:
			s = 'setenta';
			if (u!=0) s += ' y ' +toLitNum(u);
			break;
		case 8:
			s = 'ochenta';
			if (u!=0) s += ' y ' +toLitNum(u);
			break;
		case 9:
			s = 'noventa';
			if (u!=0) s += ' y ' +toLitNum(u);
			break;
	}
	return s;
}
function toLitCen(c,d){
	var s='';
	switch(c){
		case 1: if(d==0) s='cien'; else s='ciento'; break;
		case 2: s='doscientos'; break;
		case 3: s='trescientos'; break;
		case 4: s='cuatrocientos'; break;
		case 5: s='quinientos'; break;
		case 6: s='seiscientos'; break;
		case 7: s='setecientos'; break;
		case 8: s='ochocientos'; break;
		case 9: s='novecientos'; break;
	}
	return s;
}
function toLitCenComp(n)
{
	var x=n%10;
	var y=x;
	n=Math.trunc(n/10);
	var s=toLitNum(x);
	if (n==0) return s;
	x=n%10;
	n=Math.trunc(n/10);
	if (x!=0)
		s = toLitDec(x,y);
	if (n==0) return s;
	var d=x*10+y;
	x=n%10;
	n=Math.trunc(n/10);
	s = toLitCen(x,d) + ' ' + s;
	return s;
}
function toLit(n)
{
	if (n==0) return 'Cero';
	var x=n%1000;
	n=Math.trunc(n/1000);
	var s=toLitCenComp(x);
	if (n==0) return s;
	var x=n%1000;
	n=Math.trunc(n/1000);
	if (x==1) s='mil '+s;
	else s=toLitCenComp(x)+' mil '+s;
	return s;
}
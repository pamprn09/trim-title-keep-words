
# trim-title-keep-words 🇺🇸 / 🇧🇷
🇺🇸 This is a simple function to trim title characters but keep words full
🇧🇷 Portuguese: Essa é uma simples função para limitar o número de caracteres do título e não cortar palavras. 

## 🇺🇸 How to use this function

 1. **Identify the paramaters for the function:**
	 *trim_title_keep_words($title, $max_lenght, $more)*
	 $title -> use WordPress function to get the title
	 $max_lenght -> define the limit characters you want
	 $more -> define what you'll use to indicate that the title was trimmed. E.g.: ..., >>, +
	 
2. **Apply the function and echo the result:**
$new_title = thehill_trim_title( get_the_title(), 30, '...');
echo $new_title;

## 🇧🇷 Como usar essa função
 1. **Identifique os parâmetros que serão usados na função:**
	 *trim_title_keep_words($title, $max_lenght, $more)*
	  $title -> use a função do Wordpress para pegar o título
	 $max_lenght -> defina quantos characteres devem ter no máximo
	 $more -> Defina que símbolo quer usar para indicar que o título foi cortado. Exemplo.: ..., >>, +
	 
2. **Aplique a função e imprima o resultado:**
$new_title = thehill_trim_title( get_the_title(), 30, '...');
echo $new_title;

## 🇺🇸 Expected results:
**Trimmed without function:**
"Hello my wonderful wo..."
--
**Trimmed with the function:**
"Hello my wonderful..."

## 🇧🇷 Resultado esperado:
**Título cortado SEM essa função:**
"Olá meu mundo li..."
--
**Título cortado COM essa função:**
"Olá meu mundo..."

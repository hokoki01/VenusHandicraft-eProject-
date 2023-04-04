using System.Diagnostics.Tracing;

List<string> ss = new List<string>()
{
    "i","Love","you","you","love","me"
};
Console.WriteLine("Enter a String");
String s = Console.ReadLine();
//1 List number of string
foreach(char c in s)
{
    if(c>='0' && c <= '9')
    {
        Console.WriteLine(c);
    }
}
//Total number of string
int sum = 0;
for(int j=0; j<s.Length; j++)
{
    if (char.IsDigit(s[j])) sum += Int32.Parse(s[j].ToString());
}
Console.WriteLine("Sum = {0}", sum);
//Count the Upper Charactor
int CountUpperLetter = 0;
foreach(char c in s)
{
    if (c >='A' && c<='Z') CountUpperLetter++;
    //if (char.IsUpper(c)) CountUpperLetter++;
}
Console.WriteLine("Total Upper Letter ={0}", CountUpperLetter);
//Check existed word in String
int CountWord = 0;
//split string
String[] words = s.Split(' ');
if (words.Length > 0)
{   foreach (String word in words)
    {
        foreach (String w in ss)
        {
            if (w.ToLower().Equals(word.ToLower())) CountWord++;
        }
        if (CountWord == 0)
        {
            Console.WriteLine("Not Found [{0}]", word);
            ss.Add(s);
        }
        else
        {
            Console.WriteLine("The same count[{0}]={1} ",word,CountWord);
        }
    }
}

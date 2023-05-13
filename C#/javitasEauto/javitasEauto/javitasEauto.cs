using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace javitasEauto
{
    internal class javitasEauto
    {
        static void Main(string[] args)
        {
            // fájl beolvasása
            List<Eauto> eautok = new List<Eauto>();

            try
            {
                foreach (string sor in File.ReadAllLines("eu_word_hibas.csv"))
                {
                    eautok.Add(new Eauto(sor));
                }
            }
            catch
            {
                Console.WriteLine("Hiba a file beolvasása során!");
            }

            // összes eladás kiszámítása
            int osszElektromos = 0;
            int osszHagyományos = 0;

            foreach (var elem in eautok)
            {
                if (elem.ev > 2015 && elem.ev < 2020)
                osszElektromos += elem.elektromos;
                osszHagyományos += elem.hagyomanyos;
            }

            // txt létrehozása
            StreamWriter helpFajl = File.CreateText("ReadMe.txt");

            helpFajl.WriteLine($"A fájlban {eautok.Count()} adatsor található.");
            helpFajl.WriteLine($"2016-2020-ig összesen {osszElektromos+osszHagyományos}" +
                $" autót adtak el a, ebből {osszElektromos} elektromos vagy hibrid autó");
            helpFajl.WriteLine("Az elválasztó karakter: *");

            helpFajl.Close();

            //javított fájl
            StreamWriter javitott = File.CreateText("eu_word_javitott.csv");
            javitott.WriteLine("id,ev,elektromos,hagyomanyos");
            foreach (var elem in eautok)
            {
                javitott.WriteLine(elem.id + "," + elem.ev + "," + elem.elektromos + "," + elem.hagyomanyos);
            }
            javitott.Close();
            Console.WriteLine("Sikeresen kiírtam a kért adatokat a fájlba!");
            Console.ReadKey();
        }
    }
}

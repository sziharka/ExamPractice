using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace javitasEauto
{
    internal class Eauto
    {
        public int id { get; private set; }
        public int ev { get; private set; }
        public int elektromos { get; private set; }
        public int hagyomanyos { get; private set; }

        public Eauto(string egysor) 
        {
            string[] seged = egysor.Split('*');
            id = Convert.ToInt32(seged[0]);
            ev = Convert.ToInt32(seged[1]);
            elektromos = Convert.ToInt32(seged[2]);
            hagyomanyos = Convert.ToInt32(seged[3]);
        }
    }
}

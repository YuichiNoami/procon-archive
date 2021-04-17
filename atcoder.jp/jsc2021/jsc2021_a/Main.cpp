#include <bits/stdc++.h>
using namespace std;

double x, y, z;

int main()
{
  cin >> x >> y >> z;
  double p = y / x;
  cout << ceil(p * z) - 1 << endl;
}
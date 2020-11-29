#include <bits/stdc++.h>
using namespace std;

int main()
{
  vector<int> data(5);
  for (int i = 0; i < 5; i++)
  {
    cin >> data.at(i);
  }

  // dataの中で隣り合う等しい要素が存在するなら"YES"を出力し、そうでなければ"NO"を出力する
  // ここにプログラムを追記
  int now = data.at(0);
  bool same = false;
  for (int i = 1; i < 5; i++)
  {
    if (data.at(i) == now)
    {
      same = true;
      break;
    }
    now = data.at(i);
  }
  if (same)
  {
    cout << "YES" << endl;
  }
  else
  {
    cout << "NO" << endl;
  }
}

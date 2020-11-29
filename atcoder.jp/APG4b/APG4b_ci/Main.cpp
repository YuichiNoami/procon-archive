#include <bits/stdc++.h>
using namespace std;

int main()
{
  int A, B, C;
  cin >> A >> B >> C;
  vector<int> heights = {A, B, C};
  cout << *max_element(heights.begin(), heights.end()) - *min_element(heights.begin(), heights.end()) << endl;
}

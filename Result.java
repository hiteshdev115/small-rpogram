class Result {

    /*
     * Complete the 'funWithAnagrams' function below.
     *
     * The function is expected to return a STRING_ARRAY.
     * The function accepts STRING_ARRAY s as parameter.
     */

    public static boolean areAnagram(String s1, String s2){
        char[] chrctr1 = s1.toCharArray();
        char[] chrctr2 = s2.toCharArray();

        int[] totalCount = new int[26];
        for(char ch : chrctr1){
            totalCount[ch - 97] = totalCount[ ch - 97 ] + 1;
        }

        for(char ch : chrctr2){
            totalCount[ch -97] = totalCount[ ch -97 ] + 1;
        }

        for(int n : totalCount){
            if(n != 0){
                return false;
            }
        }
        return true;
    }

    public static String key(String word){
        char[] characters = word.toCharArray();
        Arrays.sort(characters);
        return new String(characters);
    }    

    public static List<String> funWithAnagrams(List<String> s) {
        // Write your code here
        List<String> answer = new LinkedList<String>();
        Set<String> foundedString = new HashSet<String>();
        for(int i = 0; i < s.size(); i++){
            String word = s.get(i);
            String key = key(word);
            if(!foundedString.contains(key)){
                answer.add(word);
                foundedString.add(key);
            }
        }
        Collections.sort(answer);
        return answer;
    }
}

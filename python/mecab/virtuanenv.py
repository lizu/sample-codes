#coding:utf-8
import MeCab,sys,bitarray
import repr as reprlib

# ///////////////////////////
# ----- set sentence -----
# ///////////////////////////
test_sentence = u'すもももももももものうち'

if isinstance(test_sentence, unicode):
    test_sentence = test_sentence.encode('utf8')

# ////////////////////////////////////
# ----- Choose test_number -----
# ////////////////////////////////////
test_num = 1

# ///////////////////////////////
# ----- defined functions -----
# ///////////////////////////////
def test01(s):
    tagger = MeCab.Tagger('-Ochasen')
    result = tagger.parse(s)
    print result
    
def test02(s):
    tagger = MeCab.Tagger('mecabrc')
    result = tagger.parse(s)
    print result

def test03(s):
    tagger = MeCab.Tagger('-Owakati')
    result = tagger.parse(s)
    print result

def test04(s):
    tagger = MeCab.Tagger('-Oyomi')
    result = tagger.parse(s)
    print result
    
def test05(s):
    tagger = MeCab.Tagger('-Ochasen')
    node = tagger.parseToNode(s)
    while node:
        print "%s %s" % (node.surface, node.feature)
        node = node.next    

def main():
    if len(sys.argv) > 1:
        test_num = int(sys.argv[1])

    loop_max = 1
    if len(sys.argv) > 2:
        loop_max = int(sys.argv[2])

    if test_num == 1:
        for i in range(loop_max):
            test01(test_sentence)
    elif test_num == 2:
        for i in range(loop_max):
            test02(test_sentence)
    elif test_num == 3:
        for i in range(loop_max):
            test03(test_sentence)
    elif test_num == 4:
        for i in range(loop_max):
            test04(test_sentence)
    else:
        for i in range(loop_max):
            test05(test_sentence)

if __name__ == "__main__":
    main()

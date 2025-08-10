(function() {
'use strict';
LMLayerWorker.loadModel(new models.TrieModel({"totalWeight":126,"root":{"type":"internal","weight":100,"values":["t","h","w","e"],"children":{"t":{"type":"leaf","weight":100,"entries":[{"key":"the","weight":100,"content":"the"}]},"e":{"type":"leaf","weight":5,"entries":[{"key":"example","weight":5,"content":"example"}]},"h":{"type":"leaf","weight":10,"entries":[{"key":"hello","weight":10,"content":"hello"}]},"w":{"type":"internal","weight":8,"values":["o"],"children":{"o":{"type":"internal","weight":8,"values":["r"],"children":{"r":{"type":"internal","weight":8,"values":["l","d"],"children":{"l":{"type":"leaf","weight":8,"entries":[{"key":"world","weight":8,"content":"world"}]},"d":{"type":"leaf","weight":3,"entries":[{"key":"wordlist","weight":3,"content":"wordlist"}]}}}}}}}}}}, {
  wordBreaker: wordBreakers['default'],
}));
})();
<html>
<head>
<?php include 'head.php'; ?>
</head>

<body>
<div id="container">
<?php include 'header.php'; ?>
<div id="spacer"><img src="img/barstaff.png" alt="staff2circuit" style="width:900px"></div>
<div id="content-container">
<?php include 'navigation.php'; ?>

<div id="content">
  <h2 id="resources">Software Tools</h2>

  <p>
    The software are presented alphabetically. Additionally to the list of software tools presented below, here is an evaluation of eight feature extraction toolboxes from <a href="https://www.researchgate.net/publication/282858086_An_Evaluation_of_Audio_Feature_Extraction_Toolboxes">Moffat <i>et al.</i> (2015)</a>.
  </p>

  <table style="width:100%">
  <tr>
    <td><b>Description</b></td>
    <td><b>Link</b></td>
  </tr>
  <tr>
    <td>
      <b>aubio</b> is a tool designed for the extraction of annotations from audio signals. Its features include segmenting a sound file before each of its attacks, performing pitch detection, tapping the beat and producing midi streams from live audio. It is written in C and has a Python interface.
      <br>
      <i>P. M. Brossier, "The aubio library at MIREX 2006," MIREX 2006, p. 1, 2006.</i>
    </td>
    <td>[<a href="https://aubio.org/">link</a>]</td>
  </tr>
  <tr>
    <td><b>Chroma Toolbox</b> - MATLAB implementations for extracting various types of
    novel pitch-based and chroma-based audio features.
    </td>
    <td>[<a href="http://resources.mpi-inf.mpg.de/MIR/chromatoolbox/">link</a>]</td>
  </tr>
  <tr>
    <td><b>Essentia</b> is an open-source C++ library for audio analysis and audio-based
        music information retrieval released under the Affero GPLv3 license
        (also available under proprietary license upon request) which has been
        developed by the Music Technology Group in Universitat Pompeu Fabra.
        Essentia was awarded with the Open-Source Competition of ACM Multimedia in 2013.
        <br>
        <i>D. Bogdanov, N. Wack, E. Gómez, S. Gulati, P. Herrera, O. Mayor, G. Roma, J. Salamon, J. R. Zapata, and X. Serra, "Essentia: An audio analysis library for music information retrieval.," in ISMIR, 2013, pp. 493-498.</i>
    </td>
    <td>[<a href="http://essentia.upf.edu/">link</a>]</td>
  </tr>
  <tr>
    <td>
      <b>jAudio</b> is a Java based stand alone application with a Graphic User Interface (GUI) and a Command Line Interface (CLI), which can batch process and outputs XML and ARFF formats.
    </td>
    <td>[<a href="http://jaudio.sourceforge.net/">link</a>]</td>
  </tr>
  <tr>
    <td><b>jMIR</b> is an open-source software suite implemented in Java for use in
        music classification research. It can be used to study music in both audio
        and symbolic formats, as well as mine cultural information from the web
        and manage music collections. jMIR includes software for extracting features,
        applying machine learning algorithms, mining metadata and analyzing metadata.
    </td>
    <td>[<a href="http://jmir.sourceforge.net">link</a>] </td>
  </tr>
  <tr>
    <td><b>LibRosa</b> is a python package for music and audio processing.
    <br>
    <i>B. McFee, M. McVicar, C. Raffel, D. Liang, and D. Repetto, "librosa: v0.3.1," Nov. 2014.</i>
    </td>
    <td>[<a href="https://github.com/bmcfee/librosa/">link</a>]</td>
  </tr>
  <tr>
    <td>
      <b>Libxtract</b> can extract low level features in real time. It is written in C, Max-MSP, Pure Data, Super Collider and Vamp.
      <br>
      <i>J. Bullock and U. Conservatoire, "Libxtract: A lightweight library for audio feature extraction," in Proceedings of the International Computer Music Conference, 2007, vol. 43.</i>
    </td>
    <td>[<a href="http://jamiebullock.github.io/LibXtract/documentation/">link</a>]</td>
  </tr>
  <tr>
    <td>
      <b>Marsyas</b> is a full real time feature extraction tool usable via a command line interface or a graphic user interface. It is written in C++ and Vamp and proposed a SVM machine learning algorithm.
      <br>
      <i>G. Tzanetakis and P. Cook, "Marsyas: A framework for audio analysis," Organised sound, vol. 4, no. 03, pp. 169-175, 2000.</i>
    </td>
    <td>[<a href="http://marsyas.info/">link</a>]</td>
  </tr>
  <tr>
    <td>
      <b>Meyda</b> can extract low level feature. It is written in Javascript and so is aimed toward web-based and real time applications.
MIR
      <br>
      <i>H. Rawlinson, N. Segal, and J. Fiala, "Meyda: an audio fea- ture extraction library for the web audio api," in Web Audio Conference.Web Audio Conference, 2015.</i>
    </td>
    <td>[<a href="https://meyda.surge.sh/">link</a>]</td>
  </tr>
  <tr>
    <td>
      <b>MIR Toolbox</b> can extract low and high level audio features. It is written in Matlab and includes preprocessing, classification, similarity measures and clustering functionality.
      <br>
      <i>O. Lartillot and P. Toiviainen, "A matlab toolbox for musical feature extraction from audio," in International Conference on Digital Audio Effects, 2007, pp. 237-244.</i>
    </td>
    <td>[<a href="https://www.jyu.fi/hytk/fi/laitokset/mutku/en/research/materials/mirtoolbox">link</a>]</td>
  </tr>
  <tr>
    <td><b>Similarity Matrix (SM) Toolbox</b> - MATLAB implementations for computing
    and enhancing similarity matrices in various ways.
    </td>
    <td>[<a href="http://www.audiolabs-erlangen.de/resources/MIR/SMtoolbox/">link</a>]</td>
  </tr>
  <tr>
    <td><b>Tempogram Toolbox</b> - MATLAB implementations for extracting various types
    of recently proposed tempo and pulse related audio representations.
    </td>
    <td>[<a href="http://resources.mpi-inf.mpg.de/MIR/tempogramtoolbox/">link</a>]</td>
  </tr>
  <tr>
    <td>
      <b>Timbre Toolbox</b> is a Matlab toolbox for low and high level feature extraction.
      <br>
      <i>G. Peeters, B. L. Giordano, P. Susini, N. Misdariis, and S. McAdams, "The timbre toolbox: Extracting audio descriptors from musical signals," The Journal of the Acoustical Society of America, vol. 130, no. 5, pp. 2902-2916, 2011.</i>
    </td>
    <td>[<a href="https://sourceforge.net/projects/matimbre/">link</a>]</td>
  </tr>
  <tr>
    <td><b>Time-scale Modification (TMS) Toolbox</b> - MATLAB implementations of
    various classical time-scale modification algorithms like OLA, WSOLA, and the
    phase vocoder, among more recent advances.
    </td>
    <td>[<a href="http://www.audiolabs-erlangen.de/resources/MIR/TSMtoolbox/">link</a>]</td>
  </tr>
  <tr>
    <td>
      <b>YAAFE</b> is a Low level feature extraction library designed for computational efficiency and batch processing. It is written in C++ and can be used with Python and Matlab.
      <br>
      <i>B. Mathieu, S. Essid, T. Fillon, J. Prado, and G. Richard, "YAAFE, an easy to use and efficient audio feature extraction software.," in ISMIR, 2010, pp. 441-446.</i>
    </td>
    <td>[<a href="http://yaafe.github.io/Yaafe/">link</a>]</td>
  </tr>
  </table>
  </br>

</div>
<?php include 'footer.php'; ?>
</div>
</div>
</body>
</html>

import java.io.*;
import java.util.StringTokenizer;
import org.apache.hadoop.conf.Configuration;
import org.apache.hadoop.fs.Path;
import org.apache.hadoop.io.IntWritable;
import org.apache.hadoop.io.LongWritable;
import org.apache.hadoop.io.Text;
import org.apache.hadoop.mapreduce.Job;
import org.apache.hadoop.mapreduce.Mapper;
import org.apache.hadoop.mapreduce.Reducer;
import org.apache.hadoop.mapreduce.Reducer.Context;
import org.apache.hadoop.mapreduce.lib.input.FileInputFormat;
import org.apache.hadoop.mapreduce.lib.input.TextInputFormat;
import org.apache.hadoop.mapreduce.lib.output.FileOutputFormat;
import org.apache.hadoop.mapreduce.lib.output.TextOutputFormat;
public class WordCount
{
private static final Text ttwo = new Text();
private static final IntWritable two = new IntWritable();
public static class Map extends Mapper<LongWritable, Text, Text, IntWritable>
{
private static final IntWritable one = new IntWritable(1);
private Text word = new Text();
public void map(LongWritable key, Text value, Mapper<LongWritable, Text, Text, IntWritable>.Context context throws IOException, InterruptedException
{
RandomAccessFile br1,br;
String line = value.toString();
line = line.toLowerCase();
line = line.replaceAll("'", "");
line = line.replaceAll("[^a-zA-Z]", " ");
try {
String sCurrentLine,save,dd,s,fin,checked;
br =new RandomAccessFile("/home/hduser/KEY/key_derrived.txt","rw");
br1 = new RandomAccessFile("/home/hduser/Java_Applications/name.txt", "rw");
dd =new String("disease");
fin=new String(" ");
int len=0,len1=0,count=0;
save = new String(" ");
checked= new String(" ");
StringTokenizer tokenizer = new StringTokenizer(line);
while (tokenizer.hasMoreTokens())
{
String token = tokenizer.nextToken();
if(dd.equals(token))
{
if (tokenizer.hasMoreTokens())
{
count=0;
save = tokenizer.nextToken();
len=save.length();
checked=" ";
}
}
while ((sCurrentLine = br.readLine()) != null)
{
if(sCurrentLine.equals(token) && checked.contains(token)==false)
{
count++;
checked=checked+token;
}
}
br.seek(0);
if(count>=3)
{
while ((s = br1.readLine()) != null)
{
if(s.contains(save))
{
len1=s.length();
word.set(s.substring(len+1));
context.write(this.word, two);
break;
}
}
}
br1.seek(0);
}
}
catch (IOException e)
{
e.printStackTrace();
}
}
}
public static class Reduce extends Reducer<Text, IntWritable, Text, IntWritable>
{
public void reduce(Text key, Iterable<IntWritable> values, Reducer<Text, IntWritable, Text, IntWritable>.Context context) throws IOException, InterruptedException
{
context.write(key, null);
}
}
public static void main(String[] args) throws Exception
{
Configuration conf = new Configuration();
Job job = new Job(conf, "WordCount");
job.setJarByClass(WordCount.class);
job.setOutputKeyClass(Text.class);
job.setOutputValueClass(IntWritable.class);
job.setMapperClass(WordCount.Map.class);
job.setReducerClass(WordCount.Reduce.class);
job.setInputFormatClass(TextInputFormat.class);
job.setOutputFormatClass(TextOutputFormat.class);
FileInputFormat.addInputPath(job, new Path(args[0]));
FileOutputFormat.setOutputPath(job, new Path(args[1]));
job.waitForCompletion(true);
}
}
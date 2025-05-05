import java.io.IOException;

public interface FileTabHand {
    void AddRow();
    void Update() throws IOException;
    void Remove();
    boolean UniqueCheck();
}
